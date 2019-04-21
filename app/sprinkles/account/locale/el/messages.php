<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

/**
 * Greek message token translations for the 'account' sprinkle.
 *
 * @author Lena Stergatou (lenasterg)
 */

return [
    'ACCOUNT' => [
        '@TRANSLATION' => 'Λογαριασμός',

        'ACCESS_DENIED' => 'Χμμ, φαίνεται ότι δεν έχετε άδεια να το κάνετε αυτό',

        'DISABLED' => 'Αυτός ο λογαριασμός έχει απενεργοποιηθεί. Επικοινωνήστε μαζί μας για περισσότερες πληροφορίες.',

        'EMAIL_UPDATED' => 'Ενημερώθηκε η διεύθυνση ηλεκτρονικού ταχυδρομείου του λογαριασμού',

        'INVALID' => 'Αυτός ο λογαριασμός δεν υπάρχει, μπορεί να έχει διαγραφεί. Παρακαλούμε επικοινωνήστε μαζί μας για περισσότερες πληροφορίες.',

        'MASTER_NOT_EXISTS' => 'Δεν μπορείτε να καταχωρίσετε έναν λογαριασμό μέχρι να δημιουργηθεί ο κύριος λογαριασμός!',

        'MY' => 'Ο λογαριασμός μου',

        'SESSION_COMPROMISED' => [
            '@TRANSLATION' => 'Η συνεδρία σας έχει παραβιαστεί, θα πρέπει να αποσυνδεθείτε σε όλες τις συσκευές και στη συνέχεια, να συνδεθείτε ξανά και να βεβαιωθείτε ότι τα δεδομένα σας δεν έχουν αλλοιωθεί.',
            'TITLE'        => 'Ο λογαριασμός σας ενδέχεται να έχει παραβιαστεί',
            'TEXT'         => 'Κάποιος μπορεί να έχει χρησιμοποιήσει τα στοιχεία σύνδεσής σας για να συνδεθεί στον ιστόποτο. Για την ασφάλειά σας, όλες οι σύνδεσεις σας αποσυνδέθηκαν. Ελέγξτε το λογαριασμό σας για ύποπτη δραστηριότητα. Καλό είναι να αλλάξετε τον κωδικό πρόσβασής σας.'
           ],
        'SESSION_EXPIRED' => 'Η περίοδος σύνδεσης σας έχει λήξει. Συνδεθείτε ξανά.',

        'SETTINGS' => [
            '@TRANSLATION' => 'Ρυθμίσεις λογαριασμού',
            'DESCRIPTION'  => 'Ενημερώστε τις ρυθμίσεις του λογαριασμού σας, συμπεριλαμβανομένου του email, του ονόματος και του κωδικού πρόσβασης.',
            'UPDATED'      => 'Οι ρυθμίσεις λογαριασμού ενημερώθηκαν'
        ],

        'TOOLS' => 'Εργαλεία λογαριασμού',

        'UNVERIFIED' => 'Ο λογαριασμός σας δεν έχει ακόμη επαληθευτεί. Ελέγξτε τα μηνύματα ηλεκτρονικού ταχυδρομείου / (και τον φάκελο ανεπιθύμητης αλληλογραφίας) για τις οδηγίες ενεργοποίησης λογαριασμού.',

        'VERIFICATION' => [
          'NEW_LINK_SENT'     => 'Έχουμε στείλει ένα νέο σύνδεσμο επιβεβαίωσης με μήνυμα ηλεκτρονικού ταχυδρομείου στη διεύθυνση {{email}}. Ελέγξτε τους φακέλους εισερχομένων και ανεπιθύμητων μηνυμάτων για αυτό το μήνυμα ηλεκτρονικού ταχυδρομείου.',
            'RESEND'          => 'Επανααποστολή του ηλ. μηνύματος επιβεβαίωσης',
            'COMPLETE'        => 'Έχετε επαληθεύσει με επιτυχία το λογαριασμό σας. Μπορείτε τώρα να συνδεθείτε.',
            'EMAIL'           => 'Παρακαλώ εισάγετε τη διεύθυνση ηλεκτρονικού ταχυδρομείου που χρησιμοποιήσατε για να εγγραφείτε και το e-mail επιβεβαίωσης θα σας αποσταλεί.',
            'PAGE'            => 'Επανααποστολή του μήνυματος ηλ. ταχυδρομείου επιβεβαίωσης για το νέο σας λογαριασμό.',
            'SEND'            => 'Αποστολή μηνύματος ηλ. ταχυδρομείου με τον σύνδεσμο επιβεβαίωσης για τον λογαριασμό μου',
            'TOKEN_NOT_FOUND' => 'Το διακριτικό ελέγχου επιβεβαίωσης δεν υπάρχει / ο λογαριασμός έχει ήδη επαληθευτεί',
        ]
    ],

    'EMAIL' => [
        'INVALID'               => 'Δεν υπάρχει λογαριασμό για το <strong>{{email}}</strong>.',
        'IN_USE'                => 'Το email <strong>{{email}}</strong> χρησιμοποιείται ήδη.',
        'VERIFICATION_REQUIRED' => 'Email (απαιτείται επιβεβαίωση - χρησιμοποιήστε μια πραγματική διεύθυνση!)'
    ],

    'EMAIL_OR_USERNAME' => 'Όνομα χρήστη ή διεύθυνση ηλεκτρονικού ταχυδρομείου',

    'FIRST_NAME' => 'Όνομα',

    'HEADER_MESSAGE_ROOT' => 'YOU ARE SIGNED IN AS THE ROOT USER',

    'LAST_NAME' => 'Επώνυμο',
    'LOCALE'    => [
        'ACCOUNT' => 'Η γλώσσα και η τοπική ρύθμιση που πρέπει να χρησιμοποιήσετε για το λογαριασμό σας',
        'INVALID' => '<strong>{{locale}}</strong> δεν είναι έγκυρη τοπική ρύθμιση.'
    ],
    'LOGIN' => [
        '@TRANSLATION'      => 'Σύνδεση',
        'ALREADY_COMPLETE'  => 'Έχετε ήδη συνδεθεί!',
        'SOCIAL'            => 'Ή συνδεθείτε με',
        'REQUIRED'          => 'Λυπούμαστε, πρέπει να είστε συνδεδεμένοι για να αποκτήσετε πρόσβαση σε αυτόν τον πόρο.'
        ],
    'LOGOUT' => 'Αποσύνδεση',

    'NAME'           => 'Όνομα',
    'NAME_AND_EMAIL' => 'Όνομα και ηλεκτρονικό ταχυδρομείο',
    'PAGE'           => [
        'LOGIN' => [
            'DESCRIPTION' => 'Συνδεθείτε στον λογαριασμό σας {{site_name}} ή εγγραφείτε για ένα νέο λογαριασμό.',
            'SUBTITLE'    => 'Εγγραφείτε δωρεάν ή συνδεθείτε με έναν υπάρχοντα λογαριασμό.',
            'TITLE'       => 'Ας ξεκινήσουμε!',
            ]
        ],
    'PASSWORD' => [
        '@TRANSLATION'        => 'Κωδικός πρόσβασης',
        'BETWEEN'             => 'Μεταξύ  {{min}} - {{max}} χαρακτήρων',
        'CONFIRM'             => 'Επιβεβαίωση κωδικού πρόσβασης',
        'CONFIRM_CURRENT'     => 'Επιβεβαιώστε τον τρέχοντα κωδικό πρόσβασης',
        'CONFIRM_NEW'         => 'Επιβεβαίωση νέου κωδικού πρόσβασης',
        'CONFIRM_NEW_EXPLAIN' => 'Πληκτρολογήστε ξανά τον νέο κωδικό πρόσβασής σας',
        'CONFIRM_NEW_HELP'    => 'Απαιτείται μόνο αν επιλέξετε νέο κωδικό πρόσβασης',
        'CREATE'              => [
            '@TRANSLATION' => 'Δημιουργία κωδικού πρόσβασης',
            'PAGE'         => 'Επιλέξτε έναν κωδικό πρόσβασης για το νέο σας λογαριασμό.',
            'SET'          => 'Ορισμός κωδικού πρόσβασης και σύνδεση'
            ],
        'CURRENT'         => 'Τρέχων κωδικός πρόσβασης',
        'CURRENT_EXPLAIN' => 'Πρέπει να επιβεβαιώσετε τον τρέχοντα κωδικό πρόσβασης για να κάνετε αλλαγές',
        'FORGOTTEN'       => 'Ξέχασα τον κωδικό μου',
        'FORGET'          => [
            '@TRANSLATION'     => 'Ξέχασα τον κωδικό μου',
            'COULD_NOT_UPDATE' => 'Δεν ήταν δυνατή η αλλαγή του κωδικού πρόσβασης',
            'EMAIL'            => 'Παρακαλώ εισάγετε τη διεύθυνση ηλεκτρονικού ταχυδρομείου που χρησιμοποιήσατε για να εγγραφείτε. Θα σας αποσταλεί ένας σύνδεσμος με οδηγίες για την επαναφορά του κωδικού πρόσβασής σας.',
            'EMAIL_SEND'       => 'Σύνδεσμος επαναφοράς κωδικού πρόσβασης ηλεκτρονικού ταχυδρομείου',
            'INVALID'          => 'Αυτό το αίτημα επαναφοράς κωδικού πρόσβασης δεν βρέθηκε ή έχει λήξει.',
           'PAGE'              => 'Λήψη συνδέσμου για επαναφορά του κωδικού πρόσβασής σας',
            'REQUEST_CANNED'   => 'Ακυρώθηκε το αίτημα επαναφοράς κωδικού πρόσβασης.',
            'REQUEST_SENT'     => 'Αν το μήνυμα ηλεκτρονικού ταχυδρομείου <strong> {{email}} </ strong> αντιστοιχεί σε ένα λογαριασμό στο σύστημά μας, ένας σύνδεσμος επαναφοράς κωδικού πρόσβασης θα αποσταλεί στο <strong> {{email}} </ strong>.'
          ],

        'HASH_FAILED'       => 'Η ενημέρωση του κωδικού πρόσβασης απέτυχε. Επικοινωνήστε με έναν διαχειριστή ιστότοπου.',
        'INVALID'           => 'Ο τρέχων κωδικός πρόσβασης δεν ταιριάζει με αυτόν που έχουμε στην εγγραφή',
        'NEW'               => 'Νέος κωδικός πρόσβασης',
        'NOTHING_TO_UPDATE' => 'Δεν μπορείτε να ενημερώσετε με τον ίδιο κωδικό πρόσβασης',

        'RESET' => [
            '@TRANSLATION' => 'Επαναφορά κωδικού πρόσβασης',
            'CHOOSE'       => 'Παρακαλώ επιλέξτε νέο κωδικό πρόσβασης για να συνεχίσετε.',
            'PAGE'         => 'Επιλέξτε έναν νέο κωδικό πρόσβασης για το λογαριασμό σας.',
            'SEND'         => 'Ορισμός νέου κωδικού πρόσβασης και σύνδεσης'
          ],

        'UPDATED' => 'Ο κωδικός πρόσβασης λογαριασμού ενημερώθηκε'
        ],

    'PROFILE' => [
        'SETTINGS' => 'Ρυθμίσεις προφίλ',
        'UPDATED'  => 'Οι ρυθμίσεις του προφίλ ενημερώθηκαν'
        ],
    'RATE_LIMIT_EXCEEDED' => 'Το όριο προσπαθειών για αυτήν τη ενέργεια έχει ξεπεραστεί. Θα πρέπει να περιμένετε {{delay}} δευτερόλεπτα πριν να σας επιτραπεί να κάνετε μια άλλη προσπάθεια.',

    'REGISTER'     => 'Εγγραφή',
    'REGISTER_ME'  => 'Θέλω να εγγραφώ',
    'REGISTRATION' => [
        'BROKEN'         => 'Λυπούμαστε, υπάρχει πρόβλημα στη διαδικασία εγγραφής στο λογαριασμό μας. Επικοινωνήστε απευθείας μαζί μας για βοήθεια.',
        'COMPLETE_TYPE1' => 'Έχετε εγγραφεί επιτυχώς, μπορείτε τώρα να συνδεθείτε.',
        'COMPLETE_TYPE2' => 'Έχετε εγγραφεί επιτυχώς. Ένας σύνδεσμος για την ενεργοποίηση του λογαριασμού σας έχει αποσταλεί στο <strong> {{email}} </ strong> και δεν θα μπορείτε να συνδεθείτε μέχρι να ολοκληρώσετε αυτό το βήμα.',
        'DISABLED'       => 'Λυπούμαστε, η εγγραφή λογαριασμών έχει απενεργοποιηθεί.',
        'LOGOUT'         => 'Λυπούμαστε, δεν μπορείτε να εγγραφείτε για λογαριασμό ενώ είστε συνδεδεμένοι. Παρακαλώ αποσυνδεθείτε πρώτα.',
        'WELCOME'        => 'Η εγγραφή είναι γρήγορη και απλή.'
        ],
    'REMEMBER_ME'             => 'Να με θυμάσαι',
    'REMEMBER_ME_ON_COMPUTER' => 'Να με θυμάσαι σε αυτόν τον υπολογιστή (δεν συνιστάται για δημόσιους υπολογιστές)',

    'SIGN_IN_HERE'       => 'Έχετε ήδη λογαριασμό; <a href="{{url}}"> Συνδεθείτε εδώ. </a>',
    'SIGNIN'             => 'Σύνδεση',
    'SIGNIN_OR_REGISTER' => 'Σύνδεση ή εγγραφή',
    'SIGNUP'             => 'Εγγραφή',

    'TOS'           => 'Όροι και Προϋποθέσεις',
    'TOS_AGREEMENT' => 'Με την εγγραφή ενός λογαριασμού στο {{site_title}}, αποδέχεστε τους <a~{link_attributes | raw}}> όρους και προϋποθέσεις </a>.',
    'TOS_FOR'       => 'Όροι και προϋποθέσεις για {{title}}',

    'USERNAME' => [
        '@TRANSLATION' => 'Όνομα χρήστη',

        'CHOOSE'        => 'Επιλέξτε ένα μοναδικό όνομα χρήστη',
        'INVALID'       => 'Μη έγκυρο όνομα χρήστη',
        'IN_USE'        => 'Το όνομα χρήστη <strong> {{user_name}} </ strong> χρησιμοποιείται ήδη.',
        'NOT_AVAILABLE' => "Το όνομα χρήστη <strong> {{user_name}} </ strong> δεν είναι διαθέσιμο. Επιλέξτε ένα διαφορετικό όνομα ή κάντε κλικ στο κουμπί 'Πρόταση'."
        ],

    'USER_ID_INVALID'       => 'Το id χρήστη που ζητήθηκε δεν υπάρχει.',
    'USER_OR_EMAIL_INVALID' => 'Το όνομα χρήστη ή η διεύθυνση ηλεκτρονικού ταχυδρομείου δεν είναι έγκυρη.',
    'USER_OR_PASS_INVALID'  => 'Ο χρήστης δεν βρέθηκε ή ο κωδικός πρόσβασης δεν είναι έγκυρος.',

    'WELCOME' => 'Καλωσορίσατε ξανά, {{first_name}}'
];
