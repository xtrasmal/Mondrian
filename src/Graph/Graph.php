<?php

namespace Trismegiste\Mondrian\Graph;

/**
 * Design pattern: Decorator
 * Component : Component
 *
 * A generic graph
 */
interface Graph
{

    /**
     * Add a vertex to the graph without edge
     *
     * @param Vertex $v
     */
    public function addVertex(Vertex $v);

    /**
     * Add a (un)directed edge if it does not already exist
     *
     * @param Vertex $source
     * @param Vertex $target
     */
    public function addEdge(Vertex $source, Vertex $target);

    /**
     * Searches an existing (directed or not) edge between two vertices
     *
     * @param Vertex $source
     * @param Vertex $target
     * @return Edge
     */
    public function searchEdge(Vertex $source, Vertex $target);

    /**
     * Get the vertices in the graph
     *
     * @return array
     */
    public function getVertexSet();

    /**
     * Get the edges set
     *
     * @return array
     */
    public function getEdgeSet();

    /**
     * Get successors of a vertex
     *
     * @return null|array null if the vertex is not in this graph
     *                         or an array of vertices
     */
    public function getSuccessor(Vertex $v);

    /**
     * Get an iterator on edges for one vertex
     *
     * @param Vertex $v
     * @return Iterator
     */
    public function getEdgeIterator(Vertex $v);

    /**
     * Returns a list of subgraph
     */
    public function getPartition();
}
