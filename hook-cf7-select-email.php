<?php 

/**
 * Slug: hook-cf7-select-email 
 * Nom: Hook CF7 Select Email
 * Description: Hook pour rediriger l'email en fonction du select ['your-demande']
 * Version: 1.0.0
 * Catégories: CF7, Hook
 * Type: php
 * Install: php=functions/cf7
 */

add_action('wpcf7_before_send_mail', 'rediriger_email_selon_demande');

function rediriger_email_selon_demande($contact_form) {
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) return;

    $data = $submission->get_posted_data();
    $demande = isset($data['your-demande']) ? $data['your-demande'] : '';

    // Récupère l'objet mail
    $mail = $contact_form->prop('mail');

    if ($demande === 'Dépannage automatisme & Motorisation') {
        $mail['recipient'] = 'commercial@appropose.fr';
    } else {
        // Laisse l’adresse par défaut définie dans CF7
        return;
    }

    // Met à jour la propriété mail
    $contact_form->set_properties(['mail' => $mail]);
}
