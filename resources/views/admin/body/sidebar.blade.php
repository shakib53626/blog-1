<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('backend/assets/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo" />
            <img
                src="{{ asset('backend/assets/vendors/images/deskapp-logo-white.svg') }}"
                alt=""
                class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span
                        ><span class="mtext">Home</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-textarea-resize"></span
                        ><span class="mtext">Task</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('create.task') }}">Create Task</a></li>
                        <li><a href="{{ route('task.index') }}">Show Task</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>