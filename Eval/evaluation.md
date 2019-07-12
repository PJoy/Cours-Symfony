# Evaluation Symfony : système de blog

## Introduction

Vous allez créer le squelette d'un système de blog avec Symfony en utilisant les notions de `route`, `controller`, `entités` et relations `ManyToOne` & `OneToMany`

Consignes :
- Le code devra être *commenté* avec un haut niveau de détail (y compris pour le code généré via la console)
- Le rendu est *individuel*
- Durée : *3h30*

## Sujet

* Initialisez un nouveau projet Symfony
 
* Créez les vues organisées selon la hiérarchie suivante :
  * base
    * layout 
      * header
      * menu
      * content
      * footer

* Ajoutez le contenu et le code CSS, les vues répondront aux spécifications suivantes :
  * Le header comprend une balise \</h1> et est placé en haut de la page
  * Le menu contient un lien vers la liste des posts (route que vous allez créer par la suite) et un lien vers les posts ayant la propriété `featured`=TRUE. Il est placé en haut de page, sous le header
  * Le content est le template dont toutes nos futures vues vont hériter
  * Le footer contient votre nom et l'année et est placé en bas de page

* Créez une entité BlogPost ayant pour membres :
  * Title (String)
  * Slug (String)
  * Content (String)
  * Date (Integer)
  * Category (String)
  * Featured (Boolean)

* Créez, à l'intérieur du contrôlleur BlogController, les actions suivantes ainsi que les routes et les vues correspondantes:
  * `listPostsAction` listant tous les posts
    * route : `/blog/list`
  * `showPostAction` affichant le contenu d'un seul post
    * routes :
      * `/blog/{id}`
      * `/blog/slug` (slug = caractères alphanumériques + "-" + "_"
      * `/blog/date/slug` (date = format YYYY)

* Créez un formulaire, les routes suivantes et les actions correspondantes ainsi que les vues associées, ermettant de gérer les posts
  * `/admin`
  * `/admin/new-post`
  * `/admin/update-post`
  * `/admin/delete-post`

* Créez l'entité Category ayant une relation OneToMany vers BlogPost constituée uniquement du membre "name". Modifiez l'entité BlogPost en fonction.

* Créez CategoryController, la route suivante, et la vue associée, listant tous les posts d'une catégorie :
  * `/category/{category}`

## Options

Optionnellement, ajoutez :
* Un système sécurisé pour l'accès à l'interface d'administration
* Un framework CSS et un design basique pour tout le site
* Une entité `Tag` en ManyToMany avec BlogPost, le contrôleur, les routes et vues associées
