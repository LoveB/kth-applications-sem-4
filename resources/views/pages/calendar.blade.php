@extends('layouts.app')

@section('content')
<header>
        <div class="cal-header">
            <h2>Explore the recipe of the day!</h2>
            <div class="flaticon-book"></div>
        </div>
</header>

<!-- Page content -->
<div class="calendar">
    <div class="month">
        <div class="month-switch fa fa-angle-double-left"></div>
        <h3>DECEMBER</h3>
        <div class="month-switch fa fa-angle-double-right"></div>
    </div>

    <hr class="thin-hr">

    <!-- Weekday row -->
    <div class="section group weekdays">
        <div class="col span_1_of_7 ">
            <p>Sun</p>
        </div>
        <div class="col span_1_of_7 ">
            <p>Mon</p>
        </div>
        <div class="col span_1_of_7 ">
            <p>Tue</p>
        </div>
        <div class="col span_1_of_7 ">
            <p>Wen</p>
        </div>
        <div class="col span_1_of_7 ">
            <p>Thur</p>
        </div>
        <div class="col span_1_of_7 ">
            <p>Fri</p>
        </div>
        <div class="col span_1_of_7 ">
            <p>Sat</p>
        </div>
    </div>

    <div id="top-group" class="section group">
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>1</p>
        </div>
    </div>

    <div  class="section group">
        <div class="col span_1_of_7 cal-day-box">
            <p>2</p>
        </div>

        <a href="meatballs" class="col span_1_of_7 cal-day-box cal-day-img-mb">
            <p>3</p>
        </a>

        <div class="col span_1_of_7 cal-day-box">
            <p>4</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>5</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>6</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>7</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>8</p>
        </div>
    </div>

    <div class="section group">
        <div class="col span_1_of_7 cal-day-box">
            <p>9</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>10</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>11</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>12</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>13</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>14</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>15</p>
        </div>
    </div>

    <div class="section group">
        <div class="col span_1_of_7 cal-day-box">
            <p>16</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>17</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>18</p>
        </div>
        <a href="pancakes" class="col span_1_of_7 cal-day-box cal-day-img-pc">
            <p>19</p>
        </a>
        <div class="col span_1_of_7 cal-day-box">
            <p>20</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>21</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>22</p>
        </div>
    </div>

    <div class="section group">
        <div class="col span_1_of_7 cal-day-box">
            <p>23</p>
        </div>
        <div class="col span_1_of_7 cal-day-box ">
            <p>24</p>
        </div>
        <div class="col span_1_of_7 cal-day-box ">
            <p>25</p>
        </div>
        <div class="col span_1_of_7 cal-day-box ">
            <p>26</p>
        </div>
        <div class="col span_1_of_7 cal-day-box ">
            <p>27</p>
        </div>
        <div class="col span_1_of_7 cal-day-box ">
            <p>28</p>
        </div>
        <div class="col span_1_of_7 cal-day-box">
            <p>29</p>
        </div>
    </div>

    <div class="section group">
        <div class="col span_1_of_7 cal-day-box">
            <p>30</p>
        </div>
        <div class="col span_1_of_7 cal-day-box ">
            <p>31</p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
        <div class="col span_1_of_7 cal-day-box not-month">
            <p></p>
        </div>
    </div>
</div>
@endsection