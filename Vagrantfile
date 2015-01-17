Vagrant.configure(2) do |config|
  config.vm.box = "avenuefactory/lamp"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.ssh.forward_agent = true
  config.vm.synced_folder "./", "/host", type: "nfs"
  config.vm.provision "shell", path: "setup.sh"
end
