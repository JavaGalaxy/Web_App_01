        <section class="admin">
            <div class="admin_movies">
                <h2>Manage movies</h2>
                <table class="admin_table">
                    <tr>
                        <th class="data_col">Title</th>
                        <th class="data_col description">Description</th>
                        <th class="admin_col">Insert/Delete</th>
                    </tr>
                    <tr class="datarow">
                        <td><input class="data" type="text" name="title" value="Life of Pi"></td>
                        <td><input class="data" type="text" name="description" value="A very silly pun."></td>
                        <td class="deletecell"><div class="delete"></div></td>
                    </tr>
                    <tr class="datarow">
                        <td><input class="data" type="text" name="title" value="Life of Brian"></td>
                        <td><input class="data" type="text" name="description" value="A biopic of Brian."></td>
                        <td class="deletecell"><div class="delete"></div></td>
                    </tr>          
                    <tr class='newdatarow'>
                        <td><input class='newdata' type='text' name='title' value=''></td>
                        <td><input class='newdata' type='text' name='description' value=''></td>
                        <td class='insertcell'><div></div></td>
                    </tr>
                </table>
            </div>
        </section>