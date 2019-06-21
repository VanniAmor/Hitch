# VanniHitch
Vanni辉的大学毕业项目，课题【基于百度地图的拼车网设计与开发】

## 项目安装

- php7.1及以上
- Mysql5.7及以上

*注： PHP需要开启CURL拓展

    # 安装项目依赖
    Composer install

    # 开启项目任务队列监听
    php artisan queue:listen



## 项目介绍

### 后端
项目使用Lumen + Dingo进行搭建，使用到的技术有：

- JWTAuth： token令牌验证
- Redis：消息队列、缓存乘客发布的路线
- 第三方技术
 - 百度地图
 - 百度文字识别
 - GoEasy信息推送
 - 七牛云对象存储
 - 短信服务

### 前端
项目分为司机端和乘客端，使用到的相关技术有：

- MUI：轻便的、H5+开发框架，能使用html编写手机App应用，负责项目的事件处理和项目架构
- Vue：负责数据绑定和渲染
- Axios：网络请求的发布和处理
- 第三方技术
  - 百度地图
  - GoEasy信息推送

### 已实现的功能
*注： 这里的用户没有指明，就是指司机和乘客

- 用户的登录注册
- 用户的身份认证，包括身份证信息，驾驶证信息，行驶证信息
- 用户设置出行路线和时间
- 司机开启接单模式
- 系统判断路线是否顺路
- 系统派单
- 司机接单
- 乘客发布订单
- 乘客确定上车
- 用户取消订单

# 效果图

![首页](https://note.youdao.com/yws/api/personal/file/04EE18E467454C7086AD1775F25524DC?method=download&shareKey=2e02ab4f920df31ae97236181954d20a "首页")
![个人中心](https://note.youdao.com/yws/api/personal/file/E61D3C66C52D4850B1439B0F3BF772A0?method=download&shareKey=ed41b0a0e75620116795f5201483f515 "个人中心")
![用户信息](https://note.youdao.com/yws/api/personal/file/BD51839D361D41DEBA085C3BF480BFA4?method=download&shareKey=522c5488e7b6ec759827803ce71363fd "用户信息")
![路线设置](https://note.youdao.com/yws/api/personal/file/D571230A69E24DC5A9261E153CB06C33?method=download&shareKey=69baf04a1eac155ab9958a0594eeab1e "路线设置")
![路线计算](https://note.youdao.com/yws/api/personal/file/66B21870F92844A9B15F82FDF6C33F4E?method=download&shareKey=b3e65c68db214a5d12987181bbe69833 "路线计算")
![出行信息](https://note.youdao.com/yws/api/personal/file/04812D9CFA994D4889FB9B3E7552B7A8?method=download&shareKey=e2bf8078839e5e8a29d58ab478bc9827 "出行信息")


