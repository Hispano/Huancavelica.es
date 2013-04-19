$stdout.sync = true

use Rack::Static,
  :urls => ["/assets"],
  :root => "."

run lambda { |env|
  [
    200,
    {
      'Content-Type'  => 'text/html',
      'Cache-Control' => 'public, max-age=86400'
    },
    File.open('index.html', File::RDONLY)
  ]
}

map "/colabora.html" do
  run Rack::File.new("colabora.html")
end

map "/descargas.html" do
  run Rack::File.new("descargas.html")
end

map "/huancavelica_datos.html" do
  run Rack::File.new("huancavelica_datos.html")
end

map "/multimedia.html" do
  run Rack::File.new("multimedia.html")
end

map "/programa_internacional.html" do
  run Rack::File.new("programa_internacional.html")
end

map "/programa_local.html" do
  run Rack::File.new("programa_local.html")
end

map "/que_es.html" do
  run Rack::File.new("que_es.html")
end

map "/quienes_somos.html" do
  run Rack::File.new("quienes_somos.html")
end

map "/quinuales.html" do
  run Rack::File.new("quinuales.html")
end

map "/voluntarios.html" do
  run Rack::File.new("voluntarios.html")
end