<?php
namespace app\extensions\command;

use app\models\Administrators;

class AdministratorCreate extends \lithium\console\Command {

    public function run() {
        $this->header('Administrator Creator');
        $this->out('Creating an admin...');
        
        $admin = Administrators::create();
        $admin->username = "brucewayne";
        $admin->password = "gothamknight";
        $admin->save();
        
        $this->out('Created user ' . $admin->username);
    }
}
?>