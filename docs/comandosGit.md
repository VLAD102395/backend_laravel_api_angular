# Comandos Git
- Para comenzar con git
## Instalar Git
- Descargar e Instalar GIT: https://git-scm.com
## Configurar Git
- nos presentamos con git
``` bash
git config --global user.email linfordviarjordi@gmail.com
git config --global user.name "Linford"
```
## Crear una Cuenta en (GitHub), GitLab o BitBucket
-----------------------
## Crear un repositorio Remoto (GitHub)
- Identificar la direccion del repositorio remoto (gitHub)
- https://github.com/VLAD102395/backend_laravel_api_angular.git

- ?? clonar el repositorio si ya existe el repositorio
```
git clone direccion_del_repositorio
```
- Inicializar si es un nuevo repositorio de GIT (local)
```
git init
```
## Relacionar el repositorio local con el remoto
```
git remote add origin https://github.com/VLAD102395/backend_laravel_api_angular.git
```
-----
-----
```
git add .
git commit -m "Laravel Base + Api Auth"
git push origin master
```