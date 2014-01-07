@if (count($errors->all()) > 0)
<div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error:</strong>
  Please check for errors
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Success:</strong>
  {{{ $message }}}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error:</strong>
  {{{ $message }}}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning:</strong>
  {{{ $message }}}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Info:</strong>
  {{{ $message }}}
</div>
@endif
