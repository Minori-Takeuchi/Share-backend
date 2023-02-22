# アプリケーション名
SHARE SNS風webアプリ
< --- トップ画面の画像 ---- >

## 作成した目的
日々感じたことを発信する、他人と繋がるためのwebアプリです。

## 他のリポジトリ
フロントエンドのリポジトリ
https://github.com/Minori-Takeuchi/2023.2.22_Takeuchi_frontend.git

## 機能一覧
ユーザー認証機能
投稿の表示、追加、削除
いいね機能
コメント機能

## 使用技術（実行環境）
フロントエンド　Nuxt.js 2.15.8
バックエンド　　Laravel　8.x
firebase Authentication 11.22.0
## テーブル設計
< --- 作成したテーブル設計の画像 ---- >

## ER図
< --- 作成したER図の画像 ---- >

## 環境構築
###mysqlにてshare_databaseを作成する
create database share_database
###テストデータ準備
UsersTableSeeder , PostsTableSeeder , CommentsTableSeeder
php artisan db:seed
###ローカルサーバーの立ち上げ
####フロンドエンド
yarn dev
####バックエンド
php artisan serve
###http://localhost:3000/login よりログイン
ゲストログインには下記テストユーザーをご利用下さい

## firebase認証用テストユーザー
(UsersTableSeederへ登録済み)
1．メールアドレス：gest@gest.com　パスワード：gestpass 
2．メールアドレス：gest2@gest.com　パスワード：gestpass
