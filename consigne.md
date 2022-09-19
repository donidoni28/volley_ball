```markdown
Nom du repo => laravel_volleyball_plateforme

Volleyball,
Pour une compétition de volleyball, il faut réaliser un site internet (plate-forme), la seule chose qu'on sait c'est que le client veut pouvoir créer des équipes et les modifier

1) Détails téchniques
Chaque équipes à :

nom de club, une ville qu'elle représente , un pays et un maximum de joueur possible dans leur équipe et par role (2 avant, 2 centraux, 2 arrière, 3remplacants)*, continent_id (pour déterminer dans quel contient l'équipe joue)

exemple :
MolenVolley, bruxelles, belgique, 12max, europe

----BACK
Les joueurs peut être rajoutés dans la plateforme :
un nom , prénom,age, téléphone,email, un genre, un pays d'origine, rôle_id dans une partie ( avant, central, arrière, remplaçant ), une equipe_id et une photo_id

Evidemment une équipe/joueur peutêtre supprimé, modifié, ajouter (crud complet). Attention, si vous supprimer le joueur, sa photo doit être également supprimé (cascade)
Si l'équipe n'a plus de place dans un poste alors le joueur ne peut pas être rajouter et on reçoit un message pour nous en prévenir(flash)

----FRONT
2) Affichages :
Pages all équipes
Il faut une page pour afficher TOUTES les équipes :
nom de l'équipe , ville , nombre de joueurs sur/maximum de place

exemple :
Molenvolley , bruxelles, 5/7max + un button voir(show)