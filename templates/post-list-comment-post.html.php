<form action="?page=comment-insert&idPost=<?= $post->id; ?>" method="POST" class="form-group">
    <label for="comment">Entrez votre commentaire</label>
    <textarea name="comment" rows="3" id="text" class="form-control" required></textarea>
    <button type="submit" class="btn btn-primary mt-3">Commenter</button>
</form>