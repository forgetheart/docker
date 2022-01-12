# ELK

修改配置

```
kibana.yml	elasticsearch.hosts: [ "http://IP:9200" ]
logstash-springboot.conf	hosts => "IP:9200"
ip地址修改为elasticsearch的ip（即docker运行的物理主机ip）
```

开放端口

```bash
# 开放防火墙端口
firewall-cmd --zone=public --add-port=9200/tcp --permanent
firewall-cmd --zone=public --add-port=5601/tcp --permanent
firewall-cmd --zone=public --add-port=4560/tcp --permanent
# 重载防火墙
firewall-cmd --reload
```

启动容器

```bash
$ docker-compose up -d
```

访问`http://your~ip:5601/ `



