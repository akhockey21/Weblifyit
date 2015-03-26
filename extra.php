    <div class="col-md-3">
        <?php $landing_page = Usermeta::get(Auth::user()->id, 'landing_page', true); 
        if ($landing_page==0){
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Locked</sub>";
            echo $html_landing_page;
        }
        if ($landing_page==1){
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Unlocked - Custom By Us!</sub>";
            echo $html_landing_page;
        }
        if ($landing_page==2){
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Unlocked - You're Using unbounce Todo it yourself!</sub>";
            echo $html_landing_page;
        }
        if ($landing_page==3){
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Unlocked - Although you cant see reports!</sub>";
            echo $html_landing_page;
        }
        else{
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Locked</sub>";
            echo $html_landing_page;
        }
        ?>
	</div>