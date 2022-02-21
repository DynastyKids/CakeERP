# CakeERP

CakeERP是基于 [CakePHP 4](https://cakephp.org)制作的开源企业资源计划应用程序（ERP系统）

目前系统正在搭建初始版本，基础功能包括：仓库管理，订单配给，会计和账单管理，POS销售，人力资源管理，客户管理和新闻稿功能

待初始版本完成后会加入更多功能

## 依赖项目

1. MySQL>=5.7
2.  PHP>=7.2
3. PHP 插件: php-mbstring, php-intl, php-mysql, php-pdo, php-xml, php-xmlrpc
4. 启用Apache 2的覆写设定
5. [Composer](https://getcomposer.org/doc/00-intro.md)

## Installation

1. 下载 [Composer](https://getcomposer.org/doc/00-intro.md) 并安装，如已安装可执行 `composer self-update`.
2. 到项目目录下执行 `composer install` 安装所有依赖项.

* 如果packagist官方下载慢可以使用国内阿里云镜像代替

## Configuration
在使用前，请编辑 `config/app_local.php` 中的`'Datasources'` 关于数据库用户名，密码和schema的设定.
其他环境变量设定可在 `config/app.php`中修改.

1. 在`config/app_local.php`更改debug模式从 `true` to `false`以关闭开发模式
2. 在MySQL导入数据库文件 `config/schema/erp.sql`，并设定好您的数据库用户账户和密码
3. 打开网站到`http://您的服务器地址/status`检查是否还有错误项
4. 打开网站到`http://您的服务器地址/setup`完成初始化设置

如果您希望在本地先行测试，可以在终端中执行
```bash
bin/cake server
```
然后访问 `http://您的服务器地址:8765`即可抵达网站

5. 当您的设置全部完毕后，您可以开始在公网上使用您的网站了

## 后续计划
1. Customer Relation Management 客户管理模块
2. Project Management (Or may interacting with your trello) 项目管理模块(看板模式，可能接入Trello)
3. Manufacturing 原材料生产管理
4. Analytics & Reporting 数据分析报告

## 其他第三方的资源使用
### 界面设计

初始化设置和Status页面使用了基于CakePHP原版的 [Milligram](https://milligram.io/) (v1.3) minimalist CSS
架构.

用户主要界面采用了基于Bootstrap5的 [Material Dashboard 2](https://github.com/creativetimofficial/material-dashboard).

2FA认证采用了 [sonata-project/google-authenticator](https://packagist.org/packages/sonata-project/google-authenticator) 模块支援，后续会加入应用本体
