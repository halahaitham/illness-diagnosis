{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    تصنيفات الامراض
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">اعضاء الجسم</a></li>

                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    الامراض
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('symptoms.index')}}">الكل</a></li>
                    <li><a href="{{route('symptoms.create')}}">اضافه الاعراض والتشخيص</a></li>
                </ul>
            </li>




            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                        الحجز
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('specialism.index')}}">التخصصات</a></li>

                </ul>
                <ul>
                    <li><a href="{{route('schedual.index')}}">مواعيد الاطباء</a></li>

                </ul>

            </li>




            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    الاعلانات
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>

                    <li><a href="{{route('advertise.create')}}">اضافه اعلان</a></li>
                </ul>
            </li>




        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->