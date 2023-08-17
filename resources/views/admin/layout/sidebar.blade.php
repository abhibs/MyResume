<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Abhiram</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin-dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
            <ul>

                @php
                    $name = App\Models\Name::first();
                    $photo = App\Models\Photo::first();
                    
                @endphp
                @if (isset($name))
                    <li> <a href="{{ route('name') }}"><i class="bx bx-right-arrow-alt"></i>Name Update</a>
                    </li>
                @else
                    <li> <a href="{{ route('name-create') }}"><i class="bx bx-right-arrow-alt"></i>Name Create</a>
                    </li>
                @endif
                <hr>
                @if (isset($photo))
                    <li> <a href="{{ route('photo') }}"><i class="bx bx-right-arrow-alt"></i>Photo Update</a>
                    </li>
                @else
                    <li> <a href="{{ route('photo-create') }}"><i class="bx bx-right-arrow-alt"></i>Photo Create</a>
                    </li>
                @endif
                <hr>
                <li> <a href="{{ route('role') }}"><i class="bx bx-right-arrow-alt"></i>All Roles</a>
                </li>
                <li> <a href="{{ route('role-create') }}"><i class="bx bx-right-arrow-alt"></i>Add Role</a>
                </li>
                <hr>
                <li> <a href="{{ route('social') }}"><i class="bx bx-right-arrow-alt"></i>All Social Media</a>
                </li>
                <li> <a href="{{ route('social-create') }}"><i class="bx bx-right-arrow-alt"></i>Add Social Media</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-cookie"></i>
                </div>
                <div class="menu-title">About</div>
            </a>
            <ul>

                @php
                    $about = App\Models\About::first();
                    
                @endphp
                @if (isset($about))
                    <li> <a href="{{ route('about') }}"><i class="bx bx-right-arrow-alt"></i>About Update</a>
                    </li>
                @else
                    <li> <a href="{{ route('about-create') }}"><i class="bx bx-right-arrow-alt"></i>About Create</a>
                    </li>
                @endif

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-code-block"></i>
                </div>
                <div class="menu-title">Skill</div>
            </a>
            <ul>
                <li> <a href="{{ route('skill') }}"><i class="bx bx-right-arrow-alt"></i>All Skills</a>
                </li>
                <li> <a href="{{ route('skill-create') }}"><i class="bx bx-right-arrow-alt"></i>Add Skill</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-bookmark-heart"></i>
                </div>
                <div class="menu-title">Resume</div>
            </a>
            <ul>
                <li> <a href="{{ route('education') }}"><i class="bx bx-right-arrow-alt"></i>All Educations</a>
                </li>
                <li> <a href="{{ route('education-create') }}"><i class="bx bx-right-arrow-alt"></i>Add Education</a>
                </li>
                <li> <a href="{{ route('experience') }}"><i class="bx bx-right-arrow-alt"></i>All Experiences</a>
                </li>
                <li> <a href="{{ route('experience-create') }}"><i class="bx bx-right-arrow-alt"></i>Add Experience</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-donate-blood"></i>
                </div>
                <div class="menu-title">Project</div>
            </a>
            <ul>
                <li> <a href="{{ route('project') }}"><i class="bx bx-right-arrow-alt"></i>All Projects</a>
                </li>
                <li> <a href="{{ route('project-create') }}"><i class="bx bx-right-arrow-alt"></i>Add Project</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-folder"></i>
                </div>
                <div class="menu-title">Certificate</div>
            </a>
            <ul>
                <li> <a href="{{ route('certificate') }}"><i class="bx bx-right-arrow-alt"></i>All Certificates</a>
                </li>
                <li> <a href="{{ route('certificate-create') }}"><i class="bx bx-right-arrow-alt"></i>Add
                        Certificate</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">Review</div>
            </a>
            <ul>
                <li> <a href="{{ route('review') }}"><i class="bx bx-right-arrow-alt"></i>All Review</a>
                </li>
                <li> <a href="{{ route('review-create') }}"><i class="bx bx-right-arrow-alt"></i>Add
                        Review</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Contact</div>
            </a>
            <ul>
                <li> <a href="{{ route('contact') }}"><i class="bx bx-right-arrow-alt"></i>All Contact List</a>
                </li>
        </li>

    </ul>
    </li>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
