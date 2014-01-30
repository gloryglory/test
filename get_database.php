<?php

	class Get_database extends CI_Model{

		public function __construct(){

			$this->load->database();

		}

		public function search(){

			$search_query = $this->input->post('search_query');
			$filter = $this->input->post('filter');
			$sort = $this->input->post('sort');
			$format = $this->input->post('format');
			$N = count($format);
			
			$pstmt = "SELECT title,publisher FROM material";
			
			
			$pstmt = $pstmt." WHERE (type='$format[0]' ";
			
			for($i=1; $i < $N; $i++)
			{
			  $pstmt = $pstmt."OR type='$format[$i]' ";			  
			}
			
					
			switch($filter){
					
				case "title":			$pstmt = $pstmt.") AND (title LIKE '% $search_query %' OR title LIKE '% $search_query' OR title LIKE '$search_query %')";
										break;
				case "publisher":		$pstmt = $pstmt.") AND (publisher LIKE '% $search_query %' OR publisher LIKE '% $search_query' OR publisher LIKE '$search_query %')";
										break;
				case "author":			$pstmt = $pstmt.") AND (author LIKE '% $search_query %' OR author LIKE '% $search_query' OR author LIKE '$search_query %')";
										break;
					
			}
					
			switch($sort){
					
				case "alphabetical":		$pstmt = $pstmt." ORDER BY title LIMIT 0,10";
											break;
			}

			
			
			$query = $this->db->query($pstmt);
			
			return $query->result();

		}

		public function search_by_page(){

			$search_query = $this->input->get('q');
			$filter = $this->input->get('f');
			$sort = $this->input->get('s');
			$format = $this->input->get('format');
			$page_number = $this->input->get('page_number');

			$start = ($page_number - 1) * 10;
			$end = ($page_number) * 10;

			$pstmt = "SELECT title,publisher FROM material";
			$N = count($format);
			
			$pstmt = $pstmt." WHERE (type='$format[0]' ";
			
			for($i=1; $i < $N; $i++)
			{
			  $pstmt = $pstmt."OR type='$format[$i]' ";			  
			}
			
					
			switch($filter){
					
				case "title":			$pstmt = $pstmt.") AND (title LIKE '% $search_query %' OR title LIKE '% $search_query' OR title LIKE '$search_query %')";
										break;
				case "publisher":		$pstmt = $pstmt.") AND (publisher LIKE '% $search_query %' OR publisher LIKE '% $search_query' OR publisher LIKE '$search_query %')";
										break;
				case "author":			$pstmt = $pstmt.") AND (author LIKE '% $search_query %' OR author LIKE '% $search_query' OR author LIKE '$search_query %')";
										break;
					
			}
					
			switch($sort){
					
				case "alphabetical":		$pstmt = $pstmt." ORDER BY title LIMIT 0,10";
											break;
			}
			
			
			$query = $this->db->query($pstmt);
			return $query->result();

		}

	}
	
	
	
?>
