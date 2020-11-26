	extends ColorRect


# Declare member variables here. Examples:
# var a = 2
# var b = "text"


# Called when the node enters the scene tree for the first time.
func _ready():
	$musica.pressed = ScriptGlobal.status_musica
	$efeitos.pressed = ScriptGlobal.status_efeitos_sonoros

# Called every frame. 'delta' is the elapsed time since the previous frame.
func _process(delta):
	if (Input.is_action_just_pressed("pausa")):
		visible = not visible
		get_tree().paused = visible

func _on_musica_pressed():
	if ($musica.pressed):
		ScriptGlobal.status_musica = true
	else:	
		ScriptGlobal.status_musica = false

func _on_efeitos_pressed():
	if ($efeitos.pressed):
		ScriptGlobal.status_efeitos_sonoros = true
	else:	
		ScriptGlobal.status_efeitos_sonoros = false


func _on_Area2D_body_entered(body):
	if(body.name =="alien1"):
		get_tree().change_scene("res://scene/cena_perdeu.tscn")
