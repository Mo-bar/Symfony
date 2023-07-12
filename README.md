# <p align="center">_Symfony_ </p>

## _Symfony CLI_ : 
* ### _vérifiez si votre ordinateur a toutes les exigences :_ 
    ```
    $ symfony check:requirements
    ```
* ### _Pour cree un application web traditionnel :_ 
    ```
    $ symfony new my_project_directory  --webapp --version=5.3
    ```
* ### _Pour créer un microservice :_ 
    ```
    $ symfony new my_project_directory  --webapp --version=5.3
    ```
* ### Exécuter l'application Symfony :
    ```
    $ symfony server:start
    ```
* ### _Exécuter l'application Symfony en arrière-plan :_
    ```
    $ symfony server:start -b
    ```
* ### _Arrêter l'application Symfony:_
    ```
    $ symfony server:stop 
    ```
## _Symfony Framework_ :
  ```
  En utilisant le framework Symfony, chaque page implique généralement deux composants principaux : 
  le composant "Router" (routeur) et le composant "Controller" (contrôleur).
  - Router (Routeur) : Le routeur est responsable de la gestion des URL de votre application Symfony.
  - Controller (Contrôleur) : Le contrôleur est responsable du traitement des requêtes HTTP spécifiques envoyées par les utilisateurs.
  ```