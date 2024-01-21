# React Server Components とは

- React Server Components は多段階計算

## 多段階計算とは

- プログラムの評価を他段階に分けて処理する機構
- 動的にコードを生成してそれを走らせる機構を備えた、計算が複数のステージからなる意味論を備えた体系
- 多段階計算 = プログラムを生成するプログラム

### RSC での多段階計算

- サーバー側(stage0), クライアント側(stage1)

# RSC による多段階計算の例

- コンパイル前

```
// サーバー用コンポーネント
const App: React.FC = () => {
  return (
    <main>
      <Section heading="第1章 はじめに">
        <P>
          本記事では、React Server Components（RSC）について解説します。
        </P>
      </Section>
      <Section heading="第2章 なぜRSCが必要なのか">
        <P>
          RSCは、Reactを土台としたフレームワークの隆盛に伴って、Reactアプリケーション全体が大きくなりすぎてしまい、サーバーとクライアントで同じアプリケーションが実行されるというモデルが限界に達したという背景があります。
        </P>
      </Section>
      ...
    </main>
  );
}
// サーバー用コンポーネント
const Section: React.FC<React.PropsWithChildren<{
  heading: string;
}> = ({ heading, children }) => {
  return (
    <section>
      <h2 className="text-2xl font-bold text-gray-900">{heading}</h2>
      <ShowMore>{children}</ShowMore>
    </section>
  );
}

// サーバー用コンポーネント
const P: React.FC<React.PropsWithChildren> = ({ children }) => {
  return <p className="text-lg text-gray-800">{children}</p>;
};

// クライアント用コンポーネント
const ShowMore: React.FC = ({ children }) => {
  const [showMore, setShowMore] = useState(false);
  return (
    <div>
      <div style={{ blockSize: showMore ? 'auto' : '100px' }}>
        {children}
      </div>
      <button onClick={() => setShowMore(true)} hidden={showMore}>もっと見る</button>
    </div>
  );
};

```

- コンパイル後

```
const ClientApp = () => {
  return (
    <main>
      <section>
        <h2 className="text-2xl font-bold text-gray-900">第1章 はじめに</h2>
        <ShowMore>
          <p className="text-lg text-gray-80">
            本記事では、React Server Components（RSC）について解説します。
          </p>
        </ShowMore>
      </section>
      <section>
        <h2 className="text-2xl font-bold text-gray-900">第2章 なぜRSCが必要なのか</h2>
        <ShowMore>
          <p className="text-lg text-gray-80">
            RSCは、Reactを土台としたフレームワークの隆盛に伴って、Reactアプリケーション全体が大きくなりすぎてしまい、サーバーとクライアントで同じアプリケーションが実行されるというモデルが限界に達したという背景があります。
          </p>
        </ShowMore>
      </section>
      ...
    </main>
  );
};

const ShowMore: React.FC = ({ children }) => {
  const [showMore, setShowMore] = useState(false);
  return (
    <div>
      <div style={{ blockSize: showMore ? 'auto' : '100px' }}>
        {children}
      </div>
      <button onClick={() => setShowMore(true)} hidden={showMore}>もっと見る</button>
    </div>
  );
};
```

- Section , P コンポーネントが stage0 で HTML に反映(インライン展開)

# 参考サイト

https://zenn.dev/uhyo/articles/react-server-components-multi-stage
