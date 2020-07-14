# collapse feature
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


## Collapse more

### Make array name button
```js
var hides = ["#hide-btn1",
              "#hide-btn2",
              "#hide-btn3",
               ];

var shows = ["#show-btn1",
              "#show-btn2",
              "#show-btn3",
               ];
```               
### Foreach item in array
```js
hides.forEach(myHides);
shows.forEach(myShows);
```
### Appay item in function so you not repeat write code
```js
function myHides(item) {
   $(item).on('click', function () {
    $('#present .faq-details .panel-collapse').collapse('hide');
    });
}

function myShows(item) {
   $(item).on('click', function () {
    $('#present .faq-details .panel-collapse').collapse('show');
    });
}

```



