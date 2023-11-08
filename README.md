---- Installation ----

Clone this repository (https://github.com/VictoriaLabs/bot-core.git)  
Install Docker (https://docs.docker.com/get-docker/)  
Install Docker-compose (if you don't already get it) (https://docs.docker.com/compose/install/)  
Install Make (https://tilburgsciencehub.com/building-blocks/configure-your-computer/automation-and-workflows/make/)  
Enjoy (optional)  

---- Get started ----

To start the Container :

```
make run
```

To stop the container :

```
make stop
```

---- Important Information ----

Add/modify the files inside the /src folder automatically add/modify the  same files in the container and inside the Laravel app

To add a new package, execute "composer require [new package]" inside the /src folder

The server runs at http://localhost:8000 (not http://0.0.0.0:8000)
