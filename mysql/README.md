## MySQL 5.7
```bash %mysql%\bin
mysqld.exe -install 
```
提示：Service successfully installed. 表示安装成功.

## 初始化mysql数据，并创建一个具有空密码的root用户
```cmd
mysqld --initialize-insecure --user=mysql 
```
- 最后的参数 --user=mysql 在 windows 也可以不用添加
- 但在 unix 等系统下好像很重要。 
- 执行命令后系统会自动生成相应的 data 目录，并自动创建好空密码的 root 用户。

## 启动mysql服务
```cmd
net start mysql
```
## 进行密码设定
 可执行如下命令：
 ```
 mysqladmin -u root -p password NewPassword

password: # OldPassword
```

- 在输入旧密码（或没改过密码的就直接回车）
- 系统很久没响应，然后报错（10060）。 原因：mysql没有通过windows防火墙 解决方法：将 D:\mysql\bin\mysqld.exe 添加到windows防火墙允许通过的应用中。
