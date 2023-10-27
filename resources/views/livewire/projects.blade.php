<div class="px-5">
    @foreach($this->projects as $project)
        <div class="mb-3">
            <p>{{$project}}</p>
            <label for="project">L'étudiant :</label>
            <select name="project" id="">
                <option value="presente">présente</option>
                <option value="nepresentepas">ne présente pas </option>
                <option value="reussi">a réussi</option>
            </select>

            <div>
                <input type="checkbox" name="design" checked />
                <label for="design">Design</label>
            </div>

            <div>
                <input type="checkbox" name="integration" checked />
                <label for="integration">Intégration</label>
            </div>

            <div>
                <input type="checkbox" name="backend" checked />
                <label for="backend">Back-end</label>
            </div>

        </div>
    @endforeach
</div>
