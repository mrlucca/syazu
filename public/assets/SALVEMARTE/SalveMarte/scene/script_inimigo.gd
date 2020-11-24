extends Area2D

func _ready():
	pass

var mov = Vector2(0,4)
var vivo = true

func _process(delta):
	translate(mov)

func _on_meteoro_body_entered(body):
	if(body.name == "alien1" and vivo):
		vivo = false
		ScriptGlobal.vida -= 10
		ScriptGlobal.qtd_pontos -= 10
		queue_free()
