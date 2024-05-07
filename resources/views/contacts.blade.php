<!doctype html>
<html>
<head>
  <title>Contacts</title>

  <script defer src="https://cdn.jsdelivr.net/npm/@imacrayon/alpine-ajax@0.3.0/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>

</head>
<body>
  <h1>Contacts</h1>
  <form role="search" aria-label="Contacts" x-init x-target="contacts">
    <label for="term">Search</label>
    <input type="search" id="term" name="term" @input.debounce="$el.form.requestSubmit()">
    <button>Submit</button>
  </form>
  <h2>Results</h2>
  <ul id="contacts">
  @foreach($contacts as $contact)
    <li>{{ $contact->shippingmark }} – {{ $contact->shippingmark }}</li>
  @endforeach
</ul>
<body>
</html>