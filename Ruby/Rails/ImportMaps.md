## Import maps とは

- Import maps は JavaScript (ES6) の import 文や import() 式で取得するモジュール(ESModules)の URL を制御することができる Web 標準
- 現状では Chrome 系ブラウザでのみサポート
- 例

  - HTML: "パッケージ名":"取得先の URL" を列挙し、ブラウザに伝える

  ```html
  <script type="importmap">
    {
      "imports": {
        "application": "/assets/application-12345.js",
        "components": "/assets/components/index-12345.js",
        "components/hello": "/assets/components/hello-12345.js",
        "react": "https://ga.jspm.io/npm:react@17.0.2/index.js",
        "react-dom": "https://ga.jspm.io/npm:react-dom@17.0.2/index.js",
        "object-assign": "https://ga.jspm.io/npm:object-assign@4.1.1/index.js",
        "scheduler": "https://ga.jspm.io/npm:scheduler@0.20.2/index.js"
      }
    }
  </script>
  <script type="module">
    // "application" から "/assets/application-12345.js" を解決、取得して実行
    import "application";
  </script>
  ```

  - JavaScript: import で指定されたパッケージ名に対応するパッケージ名を ブラウザが解決してロードする

  ```javascript
  // in assets/application.js
  // ブラウザによって `"components"` に対応する `/assets/modules/index-12345.js` よりダウンロードされ、 export された Hello オブジェクトをインポート
  // Import maps を使わないなら次のように書いていた
  // import { Hello } from "./components";
  import { Hello } from "components";
  // 同様にnpmモジュールをダウンロードしてインポート。モジュール中の依存先もimportmapに書いてあるならOK
  import React from "react-dom";
  import ReactDOM from "react-dom";

  const container = document.querySelector("#hello");
  if (container) {
    ReactDOM.render(
      React.createElement(Hello, { toWhat: container.dataset.toWhat }, null),
      container
    );
    yuuuu;
  }
  ```

### メリット

- JavaScript の Bundling が不要
- HTTP/2 で並列処理
- 小さなキャッシュ

## Rails での使用

- importmap-rails がデフォルトで設定
- config/importmap.rb で設定
- ビュー側では javascript_importmap_tags ヘルパーを使用

## 参考

https://zenn.dev/takeyuwebinc/articles/996adfac0d58fb
