## colapse feature
make button for control collapse open and close, use jquery.

```js
$('#show-btn').on('click', function () {
    $('#accordion .panel-collapse').collapse('show');
});

$('#hide-btn').on('click', function () {
    $('#accordion .panel-collapse').collapse('hide');
});
```


## code in html
```html
<center class="pb-2">
  <p id="show-btn" class="btn btn-primaryb text-white pointer rounded">Open</p>
  <p id="hide-btn" class="btn btn-danger text-white pointer rounded">Close</p>
</center>
```
