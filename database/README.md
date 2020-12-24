# database



## MySQL

启动容器

```
$ docker-compose up -d
```

默认 开启3306端口

 		账号密码：root / lalone@Admin



## MongoDB

启动容器

```
$ docker-compose up -d
```

默认 开启27017端口

 		账号密码：admin / admin



## HANA

启动容器

```
$ docker-compose up -d
```

 		账号密码：SYSTEM / Hana135246

测试

```sh
ava -jar ngdbc-2.7.7.jar -u SYSTEM,Hana135246 -n 10.10.10.226:39017 -c "SELECT DATABASE_NAME FROM SYS.M_DAT ABASES"
```

