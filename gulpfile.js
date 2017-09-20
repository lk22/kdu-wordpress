const elixir = require('laravel-elixir')

elixir((mix) => {
	mix.sass('./assets/sass/style.scss', './style.css')
})