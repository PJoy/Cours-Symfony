# Gestion E-Commerce

On part ici sur une base propre, je vous demanderai donc d'installer un nouveau projet via l'outil de Symfony.

Lors de ce TP, il vous est demandé de gérer une liste de produits en vente sur un site de e-commerce.

Le but est d'implémenter un maximum des fonctionnalités suivantes. Les fonctionnalités ( entre parenthèses ) correspondent à des choses qui n'ont pas encore été vues en cours, elles sont donc à traiter dans un second temps, si vous avez implémenté tout le reste.

* Admin
  * créer l'entité Product, au coeur de votre projet
  * créer une ou plusieurs entités en relation avec la première, du type `Category`, `Tag`, `Media`, `Comment`...
  * ( gestion en admin (index/show/new/update/delete) de ces entités via des formulaires )
  * ( pour l'Article/Product, ajout d'un champ de texte riche avec CKEditor )
  * ( pour l'Article/Product, possibilité d'upload une image )
  * ( ajout d'une template/framework CSS en admin )
  * ( l'admin se trouve sur /admin et est sécurisée )
  
* Front
  * affichage de la liste des Article/Produit
  * affichage de la liste des Article/Produit en fonction des `Tag` et/ou `Category`
  * pour l'affichage d'un seul Article/Produit, il faut que l'URL soit `slugué` (pas d'ID dans l'url)
  * sur une page Article/Produit, possibilité de vote/like ( si possible en Ajax )
  * ( sur une page Article/Produit, possibilité de commenter )
  
  
  
