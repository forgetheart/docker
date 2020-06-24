# prometheus

修改配置

```
kibana.yml	elasticsearch.hosts: [ "http://ip:9200" ]
fluent.conf	host ip
ip地址修改为elasticsearch的ip（即docker运行的物理主机ip）
```

启动容器

```
$ docker-compose up -d
```

访问`http://your~ip:5601/ `



