<?php
?>    
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">writer</th>
                    <th scope="col">when</th>
                    <th scope="col">hit</th>
                </tr>
            </thead>
            <tbody>
                <!-- 글 들어가는 부분 -->
                @foreach($boards as $row)
                <tr>
                        <th scope="row">
                            {{$row["num"]}}
                        </th>

                    <td><input type="button" class="btn btn-link" value="{{$row['title']}}" 
                        onclick="location.href='{{url('view')}}/{{$row['num']}}'"></td>
                        <td>
                            {{$row["writer"]}}
                        </td>
                        <td>
                            {{$row["created_at"]}}
                        </td>
                        <td>
                            {{$row["hits"]}}
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        <div class="col-14 d-flex p-2 justify-content-end">
            <button type="button" onclick="location.href='{{url('write_form')}}/{{$row['category']}}'" class="btn amy-crisp-gradient">글쓰기</button>
        </div>


<nav aria-label="Page navigation example">
  <ul class="pagination pg-purple justify-content-center">
        {{ $boards->links() }}
    </ul>
    </nav>
