extends Node2D


# Called when the node enters the scene tree for the first time.
func _ready():
	$total.text = "" + str(ScriptGlobal.qtd_pontos)

func _on_tentar_pressed():
	get_tree().change_scene("res://scene/cena_fase.tscn")
	

func _on_voltar_pressed():
	get_tree().change_scene("res://scene/cena_inicio.tscn")


