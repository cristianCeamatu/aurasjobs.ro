<div class="row" id="adminSidenav">
    <div class="post-preview">
        <ul class="nav nav-pills nav-stacked">
        <li><br></li>
        <?php $page = request('department'); ?>
          <li {!! $page == '' ? 'class="active"': '' !!}><a href="/candidates#wrapper">All</a></li>

          @foreach ($departments as $stats)

          <li {!! $page == $stats['department'] ? 'class="active"': '' !!}><a href="/candidates/?department={{ $stats['department'] }}#wrapper">{!! $stats['department'] . ' <small>(' . $stats['applicants']  . ')</small>' !!}</a></li>

          @endforeach

        </ul>
    </div>
</div>
<div class="clearfix visible-lg"></div>