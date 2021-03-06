# 企业级开发平台PHP版V2.0

<p align="center">
  <img width="300" src="http://images.kivii.renxixi.com/rxthink/logo.png" alt="RXThink开发团队">
</p>

<br>

#### 项目初衷
- 根据多年的研发经验，为了提交项目的研发效率，整理自己所掌握的技术，并随着技术掌握程度，不定期更新优化
- 希望此实际项目，能给需要的朋友带来价值,有你们的支持和关注，我的动力将不会衰减，一步步的将项目完善开发下去，定期加入新技术与功能

<br>

#### 项目说明
- RXThink是一个基于Apache2.0开发的，轻量级的，前后端分离的PHP快速开发平台。
- 开箱即用，节省开发时间，提升开发效率，能够快速开发项目。
- 支持MySQL、Oracle、SQL Server等主流数据库。

<br>

#### 项目介绍
RXThink是一个开源的权限及内容管理框架，基于ThinkPHP5.0.22版本开发，提供更方便、更安全的WEB应用开发体验，采用了全新的架构设计和命名空间机制，融合了模块化、驱动化和插件化的设计理念于一体，开启了国内WEB应用傻瓜式开发的新潮流。

感谢大家使用RXThink！RXThink对我来说是一个比ThinkPHP更有意义的产品，因为她能让开发者和最终用户都能受益。作为一个开源产品，希望大家都能参与进来为RXThink添砖加瓦，RXThink团队一直都在致力于让RXThink更加优秀。现在，感谢您也参与其中。

RXThink系统是一款专为中小企业量身打造的研发框架，完全基于ThinkPhp框架和Layui框架，每位开发者都可以轻松的看懂框架的架构及进行二次开发：

1、本源码遵循Apache2开源协议，系统采用ThinkPHP5.0框架；

2、后台采用各式自定义组件，非常方便的快速创建自己喜欢的表单界面，方便快速开发增删改、封装layui.table 可快速开发数据列表页面、PHPExcel数据导出、数据库在线词典、日志小工具、系统参数配置、系统强大完善的权限控制、系统菜单配置、组合数据模型等这些都是为了方便二次开发而准备的；

<br> 

— RXThink创始人 牧羊人
#### 主要特性：

    基于ThinkPHP5.0.22版本。
    模块化：全新的架构和模块化的开发机制，便于灵活扩展和二次开发。
    开源免费：RXThink遵循Apache2开源协议,免费提供使用。
    用户行为：支持自定义用户行为，可以对单个用户或者组织机构。
	
<br> 

#### 项目特点
- 代码简洁，注释丰富，上手容易，提供基础模块(用户管理，角色管理，菜单管理，代码生成等多个个模块)，可以直接作为一个后台管理系统的脚手架
- 友好的代码结构及注释，便于阅读及二次开发
- 完善的代码生成机制
- 支持跨驱动多数据源,加强业务模块的扩展性

<br> 

#### 项目结构
```
RXThink
project  应用部署目录
├─application           应用目录（可设置）
│  ├─common             公共模块目录（可更改）
│  ├─index              模块目录(可更改)
│  │  ├─config.php      模块配置文件
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  ├─command.php        命令行工具配置文件
│  ├─common.php         应用公共（函数）文件
│  ├─config.php         应用（公共）配置文件
│  ├─database.php       数据库配置文件
│  ├─tags.php           应用行为扩展定义文件
│  └─route.php          路由配置文件
├─extend                扩展类库目录（可定义）
├─public                WEB 部署目录（对外访问目录）
│  ├─static             静态资源存放目录(css,js,image)
│  ├─index.php          应用入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于 apache 的重写
├─runtime               应用的运行时目录（可写，可设置）
├─vendor                第三方类库目录（Composer）
├─thinkphp              框架系统目录
│  ├─lang               语言包目录
│  ├─library            框架核心类库目录
│  │  ├─think           Think 类库包目录
│  │  └─traits          系统 Traits 目录
│  ├─tpl                系统模板目录
│  ├─.htaccess          用于 apache 的重写
│  ├─.travis.yml        CI 定义文件
│  ├─base.php           基础定义文件
│  ├─composer.json      composer 定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     惯例配置文件
│  ├─helper.php         助手函数文件（可选）
│  ├─LICENSE.txt        授权说明文件
│  ├─phpunit.xml        单元测试配置文件
│  ├─README.md          README 文件
│  └─start.php          框架引导文件
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件

```

<br> 

#### 官网地址

欢迎访问RXThink官网地址：[http://www.rxthink.cn](http://www.rxthink.cn)
	
#### 演示地址

本演示地址仅供浏览，为了查阅体验，暂未对系统做严格的权限可操作控制，请大家自觉维护，勿恶意操作；

后台地址：[http://manage.tp50.rxthink.cn](http://manage.tp50.rxthink.cn) 账号：admin 密码：admin123
	
<br>
	
#### 技术交流：

QQ号：1175401194
	
<br>

#### 效果图
- 欢迎页
![login.png](http://images.kivii.renxixi.com/rxthink/1.png "欢迎页")
- 菜单页
![index.png](http://images.kivii.renxixi.com/rxthink/2.png "菜单页")
- 菜单图标
![user.png](http://images.kivii.renxixi.com/rxthink/3.png "菜单图标")
- 角色权限配置
![role.png](http://images.kivii.renxixi.com/rxthink/4.png "角色权限配置")
- 系统常用配置
![permission.png](http://images.kivii.renxixi.com/rxthink/5.png "系统常用配置")
- 分类选择
![menu.png](http://images.kivii.renxixi.com/rxthink/6.png "分类选择")
- SKU图集上传
![button.png](http://images.kivii.renxixi.com/rxthink/7.png "SKU图集上传")
- 属性值管理
![button.png](http://images.kivii.renxixi.com/rxthink/8.png "属性值管理")

<br>


#### 环境要求
- Nginx/Apache/IIS
- PHP5.6+
- MySQL5.1+

建议使用环境：Linux + Nginx1.14 + PHP7 + MySQL5.6


#### 安全&缺陷
如果你发现了一个安全漏洞，请发送邮件到 1175401194@qq.com。所有的安全漏洞都将及时得到解决。
