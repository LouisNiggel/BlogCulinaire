USE recette1;

DROP TABLE IF EXISTS USERS;
DROP TABLE IF EXISTS CATEGORIE;
DROP TABLE IF EXISTS INGREDIENT;
DROP TABLE IF EXISTS RECETTE;
DROP TABLE IF EXISTS COMMENTER;
DROP TABLE IF EXISTS COMPOSER;

CREATE TABLE USERS(
   EmailUser VARCHAR(100),
   PwdUser VARCHAR(255),
   PseudoUser VARCHAR(50),
   RoleUser VARCHAR(50),
   KeyUser INT,
   ConfirmKey BOOLEAN,
   PRIMARY KEY(EmailUser)
);

CREATE TABLE CATEGORIE(
   RefCategorie INT,
   NomCategorie VARCHAR(255),
   PRIMARY KEY(RefCategorie)
);

CREATE TABLE INGREDIENT(
   RefIngredient INT,
   NomIngredient VARCHAR(255),
   Unite VARCHAR(50),
   ImageIngredient VARCHAR(100),
   PRIMARY KEY(RefIngredient)
);

CREATE TABLE RECETTE(
   RefRecette INT,
   TitreRecette VARCHAR(50),
   ImageRecette VARCHAR(100),
   TempsPreparation INT,
   TempsCuisson INT,
   DescriptionRecette TEXT,
   DifficulteRecette VARCHAR(50),
   CoutRecette VARCHAR(50),
   RefCategorie INT NOT NULL,
   EmailUser VARCHAR(100) NOT NULL,
   PRIMARY KEY(RefRecette),
   FOREIGN KEY(RefCategorie) REFERENCES CATEGORIE(RefCategorie),
   FOREIGN KEY(EmailUser) REFERENCES USERS(EmailUser)
);

CREATE TABLE COMMENTER(
   EmailUser VARCHAR(100),
   RefRecette INT,
   Commentaire VARCHAR(255),
   Note INT,
   Etat BOOLEAN,
   PRIMARY KEY(EmailUser, RefRecette),
   FOREIGN KEY(EmailUser) REFERENCES USERS(EmailUser),
   FOREIGN KEY(RefRecette) REFERENCES RECETTE(RefRecette)
);

CREATE TABLE COMPOSER(
   RefRecette INT,
   RefIngredient INT,
   QteIngredient INT,
   PRIMARY KEY(RefRecette, RefIngredient),
   FOREIGN KEY(RefRecette) REFERENCES RECETTE(RefRecette),
   FOREIGN KEY(RefIngredient) REFERENCES INGREDIENT(RefIngredient)
);
