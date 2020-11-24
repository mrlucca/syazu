extends KinematicBody2D

func _ready():
	$AnimationPlayer.play("parado")

var mov = Vector2(0,4)
var vivo = true

func _process(delta):
	translate(mov)

		
func _on_dano_body_entered(body):
	if(body.name == "alien1" and vivo):
		$AnimationPlayer.play("ataque")
		vivo = false
		ScriptGlobal.vida -= 15
		ScriptGlobal.qtd_pontos -= 10
		queue_free()


func _on_ataque_area_entered(area):
	if(area.name == "Livro"):
		area.queue_free()
		$AnimationPlayer.play("morreu")
		queue_free()
		ScriptGlobal.qtd_pontos = 25
