<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <a href="/home" style="text-decoration: none;">            
            <span class="mdl-layout-title" style="color: #fff;text-shadow: -1px 1px 1px #666666;font-family: Arial, Helvetica, sans-serif;font-size: 24px;font-weight: bold;">learning</span>
        </a>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" id="search" />
                <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Settings</li>
            <li class="mdl-menu__item">
                <a href="/auth/logout" style="text-decoration: none">
                    Logout                    
                </a>
            </li>
        </ul>
    </div>
</header>
<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
    <header class="demo-drawer-header">
        <img src="../../../img/avatar-001.jpg" class="demo-avatar">
        <div class="demo-avatar-dropdown">
            <span>{{ Auth::user()->email }}</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_drop_down</i>
                <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                <li class="mdl-menu__item">hello@example.com</li>
                <li class="mdl-menu__item">info@example.com</li>
                <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
        </div>
    </header>
    <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href="/tickets"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Tickets</a>
        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
    </nav>
</div>