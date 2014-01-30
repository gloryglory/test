
<?=form_open('site/search?page_number=1')?>

				<select name="filter">
						
					<option value="title">Title</option>
					<option value="author">Author</option>
					<option value="publisher">Publisher</option>
					<option value="subject">Subject</option>
						
				</select>

				<input type="text" name="search_query"/>

				<input type="submit"/><br/>

				Sort by:
				<div>

					<input type="radio" id="radio1" name="sort" value="alphabetical" checked/><label for="radio1">Alphabetical</label>
					<input type="radio" id="radio2" name="sort" value="availability"/><label for="radio2">Availability</label>

				</div>

				<div id="checklist">
				
					<input type="checkbox" id="check1" value="book" name="format[]" onClick = "return KeepCount()" checked /><label for="check1" > Book</label>
					<input type="checkbox" id="check2" value="sp" name="format[]" onClick = "return KeepCount()"/><label for="check2"> SP</label><br/>
					<input type="checkbox" id="check3" value="thesis" name="format[]" onClick = "return KeepCount()"/><label for="check3"> Thesis</label>
					<input type="checkbox" id="check4" value="journal" name="format[]" onClick = "return KeepCount()"/><label for="check4"> Journal</label>

				</div>

			</form>
			
			
