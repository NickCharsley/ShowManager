# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
  Vagrant.configure(2) do |config|

  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "oldnicksoftware/onsUbuntuDevServer"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # but i do it due to poor conectivity....

  config.vm.box_check_update = false
  config.vm.hostname = "showmanager.vm.ons"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  #config.vm.network "forwarded_port", guest: 80, host: 4080
  config.vm.network "forwarded_port", guest:3306, host: 13306

  # Create a private network, which allows host-only access to the machine
  # using a specific IP. (which we get from dnsmasq!!!)

  ip = Socket::getaddrinfo(config.vm.hostname, 'http', nil, Socket::SOCK_STREAM)[0][3]
  config.vm.network "private_network", ip: ip

  config.hostmanager.enabled = true
  config.hostmanager.manage_host=true
  config.hostmanager.ip_resolver = proc do |vm, resolving_vm|
    if vm.id
          `VBoxManage guestproperty get #{vm.id} "/VirtualBox/GuestInfo/Net/1/V4/IP"`.split()[1]
    end
  end

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.


  #N.B. these files need to be g+r and o+r for sanity!!!

  config.vm.synced_folder "..",  "/var/www"
  config.vm.synced_folder ".",  "/var/www/html"

  #not sure if the above removes /vagrant but make sure it is there
  config.vm.synced_folder ".",  "/vagrant"  

  #Map so we can use the same path in VM as Host for phpunit etc
  config.vm.synced_folder "..",  "/home/nick/builds"
  #PHPUint in Netbeans likes to have this diectory YMMV
  config.vm.synced_folder "/home/nick/netbeans","/home/nick/netbeans"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Define a Vagrant Push strategy for pushing to Atlas. Other push strategies
  # such as FTP and Heroku are also available. See the documentation at
  # https://docs.vagrantup.com/v2/push/atlas.html for more information.
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
  config.vm.provision "shell", inline: <<-SHELL
    
  #setup databases
    mysql -u root -pvagrant -e "create database showmanager; GRANT ALL PRIVILEGES ON showmanager.* TO showmanager@localhost IDENTIFIED BY 'AA5md9qXNdBSKMVp';FLUSH PRIVILEGES;"
    mysql -u root -pvagrant -e "create database test_showmanager; GRANT ALL PRIVILEGES ON test_showmanager.* TO test@localhost IDENTIFIED BY 'bhSTGCsFY32ApKeF';FLUSH PRIVILEGES;"
    mysql -u root -pvagrant -e "create database test_adhoc_showmanager; GRANT ALL PRIVILEGES ON test_adhoc_showmanager.* TO adhoc@localhost IDENTIFIED BY 'showmanager';FLUSH PRIVILEGES;"
    mysql -u root -pvagrant -e "GRANT ALL PRIVILEGES ON test_adhoc_showmanager.* TO test@localhost IDENTIFIED BY 'bhSTGCsFY32ApKeF';FLUSH PRIVILEGES;"
  #import v3 data/schema
    mysql -u root -pvagrant showmanager < /var/www/html/database/sql/showmanager_v8.sql
  SHELL

end

