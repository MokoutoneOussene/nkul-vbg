@component('mail::message')
# Introduction

<p>Vous avez demander a reinitialiser votre mot de passe,</p><br>
<p>Cliquer sur le bouton suivant pour le faire.</p><br>
@component('mail::button', ['url' => $lien])
Creer un Nouveau mot de passe
@endcomponent

Thanks,<br>
{{ config('Riac') }}
@endcomponent
