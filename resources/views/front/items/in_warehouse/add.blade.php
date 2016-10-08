@extends('front.template')
@section('title')
  Item in Warehouse
@stop
@section('main')
  <div class="container">
    <div class="panel panel-primary">
    <div class="panel-heading">
      In Warehouse Items / Add an Item
    </div>
    <div class="panel-body">
        <form class="" action="{!! url('/items/in-warehouse/create') !! }" method="post">
          <label for="item_name">
            <input class="form-control" type="text" name="item_name" value="" placeholder="Item Name">
          </label>
          <input class="btn btn-primary btn-sm" type="button" name="name" value="SAVE">
        </form>
    </div>
    </div>
  </div>
@stop
