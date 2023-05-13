<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Convocation Letter</title>
      <style>
         @page {
         margin: 0;
         }
         body {
         font-family: Arial, sans-serif;
         background-color: #f2f2f2;
         margin: 0;
         padding: 0;
         }
         .container {
         background-color: white;
         width: 794px;
         height: 1123px;
         margin: 0 auto;
         padding: 30px 50px;
         border: 1px solid #ccc;
         box-shadow: 0 0 10px rgba(0,0,0,0.2);
         box-sizing: border-box;
         }
         .logo {
         width: 200px;
         margin-bottom: 30px;
         margin-left: 250px;
         text-align:center;
         }
         .title {
         font-size: 24px;
         font-weight: bold;
         margin-bottom: 30px;
         text-align: center;
         }
         .subtitle {
         font-size: 18px;
         margin-bottom: 20px;
         }
         .details {
         font-size: 16px;
         margin-bottom: 20px;
         }
         .contact {
         font-size: 16px;
         margin-bottom: 30px;
         }
         .signature {
         font-weight: bold;
         margin-top: 30px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <h2 class="logo" > OCP</h2>
         <p class="subtitle">Le   :</p>
         <p class="subtitle">&emsp;{{ now()->format('Y-m-d') }}</p>
         <p class="subtitle">Nom Complet  :</p>
         <p class="subtitle">&emsp;{{ $user->name }} &nbsp; {{ $user->prenom }}</p>
         <p class="subtitle">Ecole :</p>
         <p class="subtitle">&emsp;{{ $user->ecole }}</p>
         <br>
         <h1 class="title">Convocation pour votre stage chez OCP</h1>
         <p class="subtitle">Objet : Convocation pour votre stage chez Group Ocp</p>
         <p class="details">Madame, Monsieur,</p>
         <p class="details">Nous avons le plaisir de vous informer que vous avez été sélectionné(e) pour effectuer un stage <br> chez Group OCP. Nous sommes convaincus que ce stage sera pour vous une expérience enrichissante <br> et formatrice.</p>
         <p class="details">Le stage d'une durée de {{ $user->periode }} mois, se déroulera au sein du service {{ $user->departement }} et vous serez sous <br> la responsabilité de l'équipe de stage.</p>
         <p class="details">Nous vous demandons de bien vouloir vous présenter à notre site de {{ $user->site }} à l'adresse suivante :</p>
         <p class="details">{{ $user->adresse }}<br>
            Khouribga, 25000
         </p>
         <p class="details">Lors de votre arrivée, vous devrez vous présenter à l'accueil et demander à être dirigé(e) vers le service concerné.</p>
         <p class="contact">Nous vous souhaitons une excellente expérience de stage chez OCP. Si vous avez des questions <br> ou des préoccupations, n'hésitez pas à nous contacter à l'adresse e-mail suivante : ocp@email.com.</p>
         <p class="signature">Cordialement,<br>
         </p>
      </div>
   </body>
</html>