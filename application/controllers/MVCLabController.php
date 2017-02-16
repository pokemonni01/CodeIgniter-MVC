<?php
class MVCLabController extends CI_Controller {

	public function index()
	{
		$data = array(
               'title' => 'My Title',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );
		$this->load->view('myview',$data);
	}

	public function testFunction(){
		echo "New Function";
	}

	public function testParam($num, $msg){
		echo "Number: ".$num."  Message:".$msg;
	}

	public function dbChecker(){
		$query = $this->db->query("SELECT * FROM player;");
		foreach ($query->result() as $player)
		{
		        echo $player->name.' '.$player->lastname.'<br>'; 
		}
	}

	public function showGK(){
		$this->load->model('Player');
        $players = $this->Player->get_player_position_gk();
        foreach ($players as $player)
		{
		        echo $player->name.' '.$player->lastname.'<br>'; 
		}
	}

	public function showArsenalPlayer(){
		$this->load->model('Player');
		$FWplayers = $this->Player->get_player_position_fw();
		$MFplayers = $this->Player->get_player_position_mf();
		$DFplayers = $this->Player->get_player_position_df();
        $GKplayers = $this->Player->get_player_position_gk();
        $arsPlayers = array(
            'FWplayers' => $FWplayers,
            'MFplayers' => $MFplayers,
            'DFplayers' => $DFplayers,
            'GKplayers' => $GKplayers
        );
        $this->load->view('arsplayer',$arsPlayers);
	}
}

?>