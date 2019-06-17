# OKD PHP Demo Application

This repo contains a simple `index.php` file that launches `phpinfo()` functions to show that is running inside a container.

The `Dockerfile` is present as well.

To test it on OpenShift/OKD create a new project:

`oc new-project test-php-app`

Then create a new application based on this repo:

`oc new-app https://github.com/beelzetron/okd_demo_dockerfile`

OpenShift will start to build the container and, once finished, will run it.
