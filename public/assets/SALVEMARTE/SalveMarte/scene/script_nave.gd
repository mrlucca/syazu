extends Area2D


# Declare member variables here. Examples:
# var a = 2
# var b = "text"


# Called when the node enters the scene tree for the first time.
func _process(delta):
	$AnimationPlayer.play("nave")

func _on_Area2D_body_entered(body):
	if(body.name == "alien1"):
		get_tree().change_scene("res://scene/cena_venceu.tscn")
