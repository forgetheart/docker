# milvus

Milvus 是一款开源的向量数据库，支持针对 TB 级向量的增删改操作和近实时查询，具有高度灵活、稳定可靠以及高速查询等特点。`以图搜图`

修改 IP 地址

```shell
$ sed -i 's/your~ip/<ip>/g' docker-compose.yml
```

根据系统修改 milvus 配置

```
# ./milvus/conf/server_config.yaml
```

启动容器

```shell
$ docker-compose up -d
```

访问`http://your~ip:8001/ `

参考：

[milvus_docker-cpuv1.0.0](https://milvus.io/cn/docs/v1.0.0/milvus_docker-cpu.md)

[bootcamp1.0](https://github.com/milvus-io/bootcamp/tree/1.0/solutions/pic_search)