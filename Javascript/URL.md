### history.pushState(state, title, url)

- 履歴に指定した URL を追加するってこと
- 指定した URL への再読み込みは発生しない
- 読み込み処理は別途必要

```
history.pushState(null,null,"/hoge");
```

### history.repalceState(state, title, url)

- 現在の履歴が書き換えられます

```
history.relpaceState(null,null,"/hoge1");
```
