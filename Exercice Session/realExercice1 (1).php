<?php
class SessionManager {
    private $visitCountKey = 'visit_count';
    
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    public function incrementVisitCount() {
        if (!isset($_SESSION[$this->visitCountKey])) {
            $_SESSION[$this->visitCountKey] = 1;
        } else {
            $_SESSION[$this->visitCountKey]++;
        }
    }
    
    public function getVisitCount() {
        return $_SESSION[$this->visitCountKey] ?? 0;
    }
    
    public function resetSession() {
        session_unset();
        session_destroy();
    }
    
    public function getWelcomeMessage() {
        $count = $this->getVisitCount();
        if ($count <= 1) {
            return "Bienvenue à notre plateforme.";
        } else {
            return "Merci pour votre fidélité, c'est votre $count ème visite.";
        }
    }
}

$sessionManager = new SessionManager();
$sessionManager->incrementVisitCount();

if (isset($_POST['reset'])) {
    $sessionManager->resetSession();
    header("Refresh:0");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <h1><?php echo $sessionManager->getWelcomeMessage(); ?></h1>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser la session</button>
    </form>
</body>
</html>