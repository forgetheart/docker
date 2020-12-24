主机 centos8 

编辑主机系统配置

```sh
vi /etc/sysctl.conf

# 添加以下内容
fs.file-max=20000000
fs.aio-max-nr=262144
vm.memory_failure_early_kill=1
vm.max_map_count=135217728
net.ipv4.ip_local_port_range=40000 60999
```

登录 docker 

```sh
docker login
<uname>
<passwd>
```

